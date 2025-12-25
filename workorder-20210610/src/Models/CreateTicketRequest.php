<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20210610\Models\CreateTicketRequest\secretInfo;

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
        'categoryId' => 'CategoryId',
        'creatorId' => 'CreatorId',
        'description' => 'Description',
        'email' => 'Email',
        'fileNameList' => 'FileNameList',
        'secretInfo' => 'SecretInfo',
        'severity' => 'Severity',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->fileNameList)) {
            Model::validateArray($this->fileNameList);
        }
        if (null !== $this->secretInfo) {
            $this->secretInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->fileNameList)) {
                $res['FileNameList'] = [];
                $n1 = 0;
                foreach ($this->fileNameList as $item1) {
                    $res['FileNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secretInfo) {
            $res['SecretInfo'] = null !== $this->secretInfo ? $this->secretInfo->toArray($noStream) : $this->secretInfo;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
                $model->fileNameList = [];
                $n1 = 0;
                foreach ($map['FileNameList'] as $item1) {
                    $model->fileNameList[$n1] = $item1;
                    ++$n1;
                }
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
