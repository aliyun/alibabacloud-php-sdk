<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBaseContentsResponseBody\items;

use AlibabaCloud\Dara\Model;

class objectBindings extends Model
{
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

    /**
     * @var string
     */
    public $objectTypeName;
    protected $_name = [
        'graphName' => 'graphName',
        'objectId' => 'objectId',
        'objectName' => 'objectName',
        'objectType' => 'objectType',
        'objectTypeName' => 'objectTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->objectTypeName) {
            $res['objectTypeName'] = $this->objectTypeName;
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

        if (isset($map['objectTypeName'])) {
            $model->objectTypeName = $map['objectTypeName'];
        }

        return $model;
    }
}
