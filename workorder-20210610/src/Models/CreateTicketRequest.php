<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketRequest\secretInfo;
use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string[]
     */
    public $fileNameList;

    /**
     * @var secretInfo
     */
    public $secretInfo;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'creatorId'    => 'CreatorId',
        'description'  => 'Description',
        'email'        => 'Email',
        'fileNameList' => 'FileNameList',
        'secretInfo'   => 'SecretInfo',
        'severity'     => 'Severity',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->fileNameList) {
            $res['FileNameList'] = $this->fileNameList;
        }
        if (null !== $this->secretInfo) {
            $res['SecretInfo'] = null !== $this->secretInfo ? $this->secretInfo->toMap() : null;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['FileNameList'])) {
            if (!empty($map['FileNameList'])) {
                $model->fileNameList = $map['FileNameList'];
            }
        }
        if (isset($map['SecretInfo'])) {
            $model->secretInfo = secretInfo::fromMap($map['SecretInfo']);
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
