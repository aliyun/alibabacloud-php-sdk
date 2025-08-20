<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ValidateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string[]
     */
    public $updateInfoOptions;

    /**
     * @var string
     */
    public $validationOption;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
        'templateBody' => 'TemplateBody',
        'templateURL' => 'TemplateURL',
        'updateInfoOptions' => 'UpdateInfoOptions',
        'validationOption' => 'ValidationOption',
    ];

    public function validate()
    {
        if (\is_array($this->updateInfoOptions)) {
            Model::validateArray($this->updateInfoOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        if (null !== $this->updateInfoOptions) {
            if (\is_array($this->updateInfoOptions)) {
                $res['UpdateInfoOptions'] = [];
                $n1 = 0;
                foreach ($this->updateInfoOptions as $item1) {
                    $res['UpdateInfoOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->validationOption) {
            $res['ValidationOption'] = $this->validationOption;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        if (isset($map['UpdateInfoOptions'])) {
            if (!empty($map['UpdateInfoOptions'])) {
                $model->updateInfoOptions = [];
                $n1 = 0;
                foreach ($map['UpdateInfoOptions'] as $item1) {
                    $model->updateInfoOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ValidationOption'])) {
            $model->validationOption = $map['ValidationOption'];
        }

        return $model;
    }
}
