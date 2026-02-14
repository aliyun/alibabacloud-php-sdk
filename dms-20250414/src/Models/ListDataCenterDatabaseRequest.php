<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListDataCenterDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $callFrom;

    /**
     * @var string
     */
    public $dmsUnit;

    /**
     * @var string
     */
    public $importType;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $searchKey;
    protected $_name = [
        'callFrom' => 'CallFrom',
        'dmsUnit' => 'DmsUnit',
        'importType' => 'ImportType',
        'language' => 'Language',
        'searchKey' => 'SearchKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callFrom) {
            $res['CallFrom'] = $this->callFrom;
        }

        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->importType) {
            $res['ImportType'] = $this->importType;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
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
        if (isset($map['CallFrom'])) {
            $model->callFrom = $map['CallFrom'];
        }

        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['ImportType'])) {
            $model->importType = $map['ImportType'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        return $model;
    }
}
