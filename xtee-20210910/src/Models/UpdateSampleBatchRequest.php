<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSampleBatchRequest extends Model
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
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $versions;
    protected $_name = [
        'lang'     => 'Lang',
        'ids'      => 'ids',
        'regId'    => 'regId',
        'tags'     => 'tags',
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
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSampleBatchRequest
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
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['versions'])) {
            $model->versions = $map['versions'];
        }

        return $model;
    }
}
