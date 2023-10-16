<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeIntentionUserListResponseBody\data;

use AlibabaCloud\Tea\Model;

class trademark extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documentDate;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $documentUrl;

    /**
     * @var int
     */
    public $grade;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'bizId'          => 'BizId',
        'classification' => 'Classification',
        'description'    => 'Description',
        'documentDate'   => 'DocumentDate',
        'documentName'   => 'DocumentName',
        'documentUrl'    => 'DocumentUrl',
        'grade'          => 'Grade',
        'mobile'         => 'Mobile',
        'registerNumber' => 'RegisterNumber',
        'status'         => 'Status',
        'type'           => 'Type',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentDate) {
            $res['DocumentDate'] = $this->documentDate;
        }
        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }
        if (null !== $this->documentUrl) {
            $res['DocumentUrl'] = $this->documentUrl;
        }
        if (null !== $this->grade) {
            $res['Grade'] = $this->grade;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocumentDate'])) {
            $model->documentDate = $map['DocumentDate'];
        }
        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }
        if (isset($map['DocumentUrl'])) {
            $model->documentUrl = $map['DocumentUrl'];
        }
        if (isset($map['Grade'])) {
            $model->grade = $map['Grade'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
