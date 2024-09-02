<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateSecondRankRequest extends Model
{
    /**
     * @description The request body. For more information, see [SecondRank](https://help.aliyun.com/document_detail/170008.html).
     *
     * @var SecondRank
     */
    public $body;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'body'   => 'body',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecondRankRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = SecondRank::fromMap($map['body']);
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
