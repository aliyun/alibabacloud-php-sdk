<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeWhitelistTemplateLinkedInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $insName;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'insName' => 'InsName',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->insName)) {
            Model::validateArray($this->insName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insName) {
            if (\is_array($this->insName)) {
                $res['InsName'] = [];
                $n1 = 0;
                foreach ($this->insName as $item1) {
                    $res['InsName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsName'])) {
            if (!empty($map['InsName'])) {
                $model->insName = [];
                $n1 = 0;
                foreach ($map['InsName'] as $item1) {
                    $model->insName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
