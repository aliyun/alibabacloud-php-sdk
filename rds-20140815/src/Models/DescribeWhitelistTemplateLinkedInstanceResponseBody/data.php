<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateLinkedInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $insName;

    /**
     * @example 412
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'insName'    => 'InsName',
        'templateId' => 'TemplateId',
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
            if (!empty($map['InsName'])) {
                $model->insName = $map['InsName'];
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
