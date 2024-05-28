<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetSearchCodePreviewRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 60d54f3daccf2bbd6659f3ad/gitlabhq/master/config/environments/test.rb
     *
     * @var string
     */
    public $docId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDsl;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description This parameter is required.
     *
     * @example 627475075b46541dd2ff01bc
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'docId'          => 'docId',
        'isDsl'          => 'isDsl',
        'keyword'        => 'keyword',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->isDsl) {
            $res['isDsl'] = $this->isDsl;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSearchCodePreviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['isDsl'])) {
            $model->isDsl = $map['isDsl'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
