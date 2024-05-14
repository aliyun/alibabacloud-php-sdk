<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabSessionResponseBody;

use AlibabaCloud\Tea\Model;

class labSession extends Model
{
    /**
     * @example 2023-05-05 15:01:59
     *
     * @var string
     */
    public $createTime;

    /**
     * @example False
     *
     * @var bool
     */
    public $finished;

    /**
     * @example 838
     *
     * @var string
     */
    public $id;

    /**
     * @example 875
     *
     * @var int
     */
    public $labId;

    /**
     * @example -
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'createTime' => 'CreateTime',
        'finished'   => 'Finished',
        'id'         => 'Id',
        'labId'      => 'LabId',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return labSession
     */
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
