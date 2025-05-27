<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $diplayLine;

    /**
     * @var bool
     */
    public $displayed;

    /**
     * @var bool
     */
    public $imported;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $sourceLogCode;

    /**
     * @var string
     */
    public $sourceProdCode;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'diplayLine' => 'DiplayLine',
        'displayed' => 'Displayed',
        'imported' => 'Imported',
        'mainUserId' => 'MainUserId',
        'sourceLogCode' => 'SourceLogCode',
        'sourceProdCode' => 'SourceProdCode',
        'subUserId' => 'SubUserId',
        'subUserName' => 'SubUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diplayLine) {
            $res['DiplayLine'] = $this->diplayLine;
        }

        if (null !== $this->displayed) {
            $res['Displayed'] = $this->displayed;
        }

        if (null !== $this->imported) {
            $res['Imported'] = $this->imported;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }

        if (null !== $this->sourceProdCode) {
            $res['SourceProdCode'] = $this->sourceProdCode;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
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
        if (isset($map['DiplayLine'])) {
            $model->diplayLine = $map['DiplayLine'];
        }

        if (isset($map['Displayed'])) {
            $model->displayed = $map['Displayed'];
        }

        if (isset($map['Imported'])) {
            $model->imported = $map['Imported'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }

        if (isset($map['SourceProdCode'])) {
            $model->sourceProdCode = $map['SourceProdCode'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
