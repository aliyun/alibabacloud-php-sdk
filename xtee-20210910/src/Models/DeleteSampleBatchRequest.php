<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DeleteSampleBatchRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $versions;
    protected $_name = [
        'lang'     => 'Lang',
        'ids'      => 'ids',
        'regId'    => 'regId',
        'versions' => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ids) {
            $res['ids'] = $this->ids;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSampleBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ids'])) {
            $model->ids = $map['ids'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['versions'])) {
            $model->versions = $map['versions'];
        }

        return $model;
    }
}
