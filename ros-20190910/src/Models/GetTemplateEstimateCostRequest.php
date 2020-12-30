<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateEstimateCostRequest\parameters;
use AlibabaCloud\Tea\Model;

class GetTemplateEstimateCostRequest extends Model
{
    /**
     * @var string
     */
    public $templateURL;

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
    public $clientToken;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var parameters[]
     */
    public $parameters;
    protected $_name = [
        'templateURL'     => 'TemplateURL',
        'regionId'        => 'RegionId',
        'templateBody'    => 'TemplateBody',
        'clientToken'     => 'ClientToken',
        'templateId'      => 'TemplateId',
        'templateVersion' => 'TemplateVersion',
        'parameters'      => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateEstimateCostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
