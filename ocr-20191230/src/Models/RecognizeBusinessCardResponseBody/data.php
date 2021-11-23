<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @var string[]
     */
    public $cellPhoneNumbers;

    /**
     * @var string[]
     */
    public $companies;

    /**
     * @var string[]
     */
    public $departments;

    /**
     * @var string[]
     */
    public $emails;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $officePhoneNumbers;

    /**
     * @var string[]
     */
    public $titles;
    protected $_name = [
        'addresses'          => 'Addresses',
        'cellPhoneNumbers'   => 'CellPhoneNumbers',
        'companies'          => 'Companies',
        'departments'        => 'Departments',
        'emails'             => 'Emails',
        'name'               => 'Name',
        'officePhoneNumbers' => 'OfficePhoneNumbers',
        'titles'             => 'Titles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
        }
        if (null !== $this->cellPhoneNumbers) {
            $res['CellPhoneNumbers'] = $this->cellPhoneNumbers;
        }
        if (null !== $this->companies) {
            $res['Companies'] = $this->companies;
        }
        if (null !== $this->departments) {
            $res['Departments'] = $this->departments;
        }
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->officePhoneNumbers) {
            $res['OfficePhoneNumbers'] = $this->officePhoneNumbers;
        }
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
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
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = $map['Addresses'];
            }
        }
        if (isset($map['CellPhoneNumbers'])) {
            if (!empty($map['CellPhoneNumbers'])) {
                $model->cellPhoneNumbers = $map['CellPhoneNumbers'];
            }
        }
        if (isset($map['Companies'])) {
            if (!empty($map['Companies'])) {
                $model->companies = $map['Companies'];
            }
        }
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = $map['Departments'];
            }
        }
        if (isset($map['Emails'])) {
            if (!empty($map['Emails'])) {
                $model->emails = $map['Emails'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OfficePhoneNumbers'])) {
            if (!empty($map['OfficePhoneNumbers'])) {
                $model->officePhoneNumbers = $map['OfficePhoneNumbers'];
            }
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = $map['Titles'];
            }
        }

        return $model;
    }
}
