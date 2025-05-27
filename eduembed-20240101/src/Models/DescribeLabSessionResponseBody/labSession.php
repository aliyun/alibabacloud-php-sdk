<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabSessionResponseBody;

use AlibabaCloud\Dara\Model;

class labSession extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $labId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'createTime' => 'CreateTime',
        'finished' => 'Finished',
        'id' => 'Id',
        'labId' => 'LabId',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
