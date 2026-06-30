<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListRayLogsResponseBody\data\objectList;

class data extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxKeys;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var objectList[]
     */
    public $objectList;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucketName' => 'bucketName',
        'delimiter' => 'delimiter',
        'isTruncated' => 'isTruncated',
        'marker' => 'marker',
        'maxKeys' => 'maxKeys',
        'nextMarker' => 'nextMarker',
        'objectList' => 'objectList',
        'prefix' => 'prefix',
    ];

    public function validate()
    {
        if (\is_array($this->objectList)) {
            Model::validateArray($this->objectList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->delimiter) {
            $res['delimiter'] = $this->delimiter;
        }

        if (null !== $this->isTruncated) {
            $res['isTruncated'] = $this->isTruncated;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxKeys) {
            $res['maxKeys'] = $this->maxKeys;
        }

        if (null !== $this->nextMarker) {
            $res['nextMarker'] = $this->nextMarker;
        }

        if (null !== $this->objectList) {
            if (\is_array($this->objectList)) {
                $res['objectList'] = [];
                $n1 = 0;
                foreach ($this->objectList as $item1) {
                    $res['objectList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
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
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['delimiter'])) {
            $model->delimiter = $map['delimiter'];
        }

        if (isset($map['isTruncated'])) {
            $model->isTruncated = $map['isTruncated'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxKeys'])) {
            $model->maxKeys = $map['maxKeys'];
        }

        if (isset($map['nextMarker'])) {
            $model->nextMarker = $map['nextMarker'];
        }

        if (isset($map['objectList'])) {
            if (!empty($map['objectList'])) {
                $model->objectList = [];
                $n1 = 0;
                foreach ($map['objectList'] as $item1) {
                    $model->objectList[$n1] = objectList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        return $model;
    }
}
