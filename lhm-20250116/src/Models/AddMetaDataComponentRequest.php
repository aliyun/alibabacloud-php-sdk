<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class AddMetaDataComponentRequest extends Model
{
    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var int
     */
    public $componentType;

    /**
     * @var string
     */
    public $dsConfig;

    /**
     * @var string
     */
    public $dsDesc;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var int
     */
    public $dsStatus;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $dsVersion;
    protected $_name = [
        'categoryType' => 'categoryType',
        'componentType' => 'componentType',
        'dsConfig' => 'dsConfig',
        'dsDesc' => 'dsDesc',
        'dsId' => 'dsId',
        'dsName' => 'dsName',
        'dsStatus' => 'dsStatus',
        'dsType' => 'dsType',
        'dsVersion' => 'dsVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['categoryType'] = $this->categoryType;
        }

        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->dsConfig) {
            $res['dsConfig'] = $this->dsConfig;
        }

        if (null !== $this->dsDesc) {
            $res['dsDesc'] = $this->dsDesc;
        }

        if (null !== $this->dsId) {
            $res['dsId'] = $this->dsId;
        }

        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
        }

        if (null !== $this->dsStatus) {
            $res['dsStatus'] = $this->dsStatus;
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->dsVersion) {
            $res['dsVersion'] = $this->dsVersion;
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
        if (isset($map['categoryType'])) {
            $model->categoryType = $map['categoryType'];
        }

        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['dsConfig'])) {
            $model->dsConfig = $map['dsConfig'];
        }

        if (isset($map['dsDesc'])) {
            $model->dsDesc = $map['dsDesc'];
        }

        if (isset($map['dsId'])) {
            $model->dsId = $map['dsId'];
        }

        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        if (isset($map['dsStatus'])) {
            $model->dsStatus = $map['dsStatus'];
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['dsVersion'])) {
            $model->dsVersion = $map['dsVersion'];
        }

        return $model;
    }
}
