<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessCardResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $companies;

    /**
     * @var string[]
     */
    public $titles;

    /**
     * @var string[]
     */
    public $emails;

    /**
     * @var string[]
     */
    public $departments;

    /**
     * @var string[]
     */
    public $officePhoneNumbers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $cellPhoneNumbers;

    /**
     * @var string[]
     */
    public $addresses;
    protected $_name = [
        'companies'          => 'Companies',
        'titles'             => 'Titles',
        'emails'             => 'Emails',
        'departments'        => 'Departments',
        'officePhoneNumbers' => 'OfficePhoneNumbers',
        'name'               => 'Name',
        'cellPhoneNumbers'   => 'CellPhoneNumbers',
        'addresses'          => 'Addresses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companies) {
            $res['Companies'] = $this->companies;
        }
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
        }
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }
        if (null !== $this->departments) {
            $res['Departments'] = $this->departments;
        }
        if (null !== $this->officePhoneNumbers) {
            $res['OfficePhoneNumbers'] = $this->officePhoneNumbers;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->cellPhoneNumbers) {
            $res['CellPhoneNumbers'] = $this->cellPhoneNumbers;
        }
        if (null !== $this->addresses) {
            $res['Addresses'] = $this->addresses;
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
        if (isset($map['Companies'])) {
            if (!empty($map['Companies'])) {
                $model->companies = $map['Companies'];
            }
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = $map['Titles'];
            }
        }
        if (isset($map['Emails'])) {
            if (!empty($map['Emails'])) {
                $model->emails = $map['Emails'];
            }
        }
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = $map['Departments'];
            }
        }
        if (isset($map['OfficePhoneNumbers'])) {
            if (!empty($map['OfficePhoneNumbers'])) {
                $model->officePhoneNumbers = $map['OfficePhoneNumbers'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CellPhoneNumbers'])) {
            if (!empty($map['CellPhoneNumbers'])) {
                $model->cellPhoneNumbers = $map['CellPhoneNumbers'];
            }
        }
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = $map['Addresses'];
            }
        }

        return $model;
    }
}
