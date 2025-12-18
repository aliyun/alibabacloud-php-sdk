<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\RiskCheckResults;

use AlibabaCloud\Dara\Model;

class riskDetails extends Model
{
    /**
     * @var string
     */
    public $checkModule;

    /**
     * @var string[]
     */
    public $data;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isNoticeMute;

    /**
     * @var string
     */
    public $riskCode;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $situation;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'checkModule' => 'checkModule',
        'data' => 'data',
        'description' => 'description',
        'isNoticeMute' => 'isNoticeMute',
        'riskCode' => 'riskCode',
        'riskLevel' => 'riskLevel',
        'riskName' => 'riskName',
        'riskType' => 'riskType',
        'situation' => 'situation',
        'suggestion' => 'suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkModule) {
            $res['checkModule'] = $this->checkModule;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->isNoticeMute) {
            $res['isNoticeMute'] = $this->isNoticeMute;
        }

        if (null !== $this->riskCode) {
            $res['riskCode'] = $this->riskCode;
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskName) {
            $res['riskName'] = $this->riskName;
        }

        if (null !== $this->riskType) {
            $res['riskType'] = $this->riskType;
        }

        if (null !== $this->situation) {
            $res['situation'] = $this->situation;
        }

        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
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
        if (isset($map['checkModule'])) {
            $model->checkModule = $map['checkModule'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                foreach ($map['data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['isNoticeMute'])) {
            $model->isNoticeMute = $map['isNoticeMute'];
        }

        if (isset($map['riskCode'])) {
            $model->riskCode = $map['riskCode'];
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['riskName'])) {
            $model->riskName = $map['riskName'];
        }

        if (isset($map['riskType'])) {
            $model->riskType = $map['riskType'];
        }

        if (isset($map['situation'])) {
            $model->situation = $map['situation'];
        }

        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }

        return $model;
    }
}
