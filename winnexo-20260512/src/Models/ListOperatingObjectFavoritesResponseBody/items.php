<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOperatingObjectFavoritesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $followedAt;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'description' => 'description',
        'followedAt' => 'followedAt',
        'graphName' => 'graphName',
        'objectId' => 'objectId',
        'objectName' => 'objectName',
        'objectType' => 'objectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->followedAt) {
            $res['followedAt'] = $this->followedAt;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['followedAt'])) {
            $model->followedAt = $map['followedAt'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        return $model;
    }
}
