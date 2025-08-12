<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\templateInfos;

use AlibabaCloud\Dara\Model;

class templateInfo extends Model
{
    /**
     * @var int
     */
    public $effectTime;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $ver;
    protected $_name = [
        'effectTime' => 'EffectTime',
        'templateId' => 'TemplateId',
        'ver' => 'Ver',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->ver) {
            $res['Ver'] = $this->ver;
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
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Ver'])) {
            $model->ver = $map['Ver'];
        }

        return $model;
    }
}
