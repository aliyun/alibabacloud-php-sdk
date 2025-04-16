<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models;

use AlibabaCloud\Dara\Model;

class DescribeDirectoriesRequest extends Model
{
    /**
     * @var string[]
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'directoryType' => 'DirectoryType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->directoryId)) {
            Model::validateArray($this->directoryId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            if (\is_array($this->directoryId)) {
                $res['DirectoryId'] = [];
                $n1 = 0;
                foreach ($this->directoryId as $item1) {
                    $res['DirectoryId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['DirectoryId'])) {
            if (!empty($map['DirectoryId'])) {
                $model->directoryId = [];
                $n1 = 0;
                foreach ($map['DirectoryId'] as $item1) {
                    $model->directoryId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
