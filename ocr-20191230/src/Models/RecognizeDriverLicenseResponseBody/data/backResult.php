<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponseBody\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    /**
     * @var string
     */
    public $archiveNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $record;
    protected $_name = [
        'archiveNumber' => 'ArchiveNumber',
        'name'          => 'Name',
        'cardNumber'    => 'CardNumber',
        'record'        => 'Record',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveNumber) {
            $res['ArchiveNumber'] = $this->archiveNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveNumber'])) {
            $model->archiveNumber = $map['ArchiveNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }

        return $model;
    }
}
