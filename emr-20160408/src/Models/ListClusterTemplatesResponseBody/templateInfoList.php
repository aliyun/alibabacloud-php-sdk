<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesResponseBody\templateInfoList\templateInfo;
use AlibabaCloud\Tea\Model;

class templateInfoList extends Model
{
    /**
     * @var templateInfo[]
     */
    public $templateInfo;
    protected $_name = [
        'templateInfo' => 'TemplateInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateInfo) {
            $res['TemplateInfo'] = [];
            if (null !== $this->templateInfo && \is_array($this->templateInfo)) {
                $n = 0;
                foreach ($this->templateInfo as $item) {
                    $res['TemplateInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateInfo'])) {
            if (!empty($map['TemplateInfo'])) {
                $model->templateInfo = [];
                $n                   = 0;
                foreach ($map['TemplateInfo'] as $item) {
                    $model->templateInfo[$n++] = null !== $item ? templateInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
