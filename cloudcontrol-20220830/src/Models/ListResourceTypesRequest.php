<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class ListResourceTypesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'resourceTypes' => 'resourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['resourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['resourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['resourceTypes'])) {
            if (!empty($map['resourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['resourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
