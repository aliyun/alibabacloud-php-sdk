<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class ListEventStreamingsRequest extends Model
{
    /**
     * @var int
     */
    public $limit;
    /**
     * @var string
     */
    public $namePrefix;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $sinkArn;
    /**
     * @var string
     */
    public $sourceArn;
    protected $_name = [
        'limit'      => 'Limit',
        'namePrefix' => 'NamePrefix',
        'nextToken'  => 'NextToken',
        'sinkArn'    => 'SinkArn',
        'sourceArn'  => 'SourceArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->namePrefix) {
            $res['NamePrefix'] = $this->namePrefix;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->sinkArn) {
            $res['SinkArn'] = $this->sinkArn;
        }

        if (null !== $this->sourceArn) {
            $res['SourceArn'] = $this->sourceArn;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SinkArn'])) {
            $model->sinkArn = $map['SinkArn'];
        }

        if (isset($map['SourceArn'])) {
            $model->sourceArn = $map['SourceArn'];
        }

        return $model;
    }
}
