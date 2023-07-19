<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceLinkedWhitelistTemplateResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceLinkedWhitelistTemplateResponseBody\data\templates;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example rm-bp191w771kd3****
     *
     * @var string
     */
    public $insName;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'insName'   => 'InsName',
        'templates' => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->templates) {
            $res['Templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['Templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['Templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
