<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListCatalogsResponseBody;

use AlibabaCloud\Dara\Model;

class catalogs extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogProvider;

    /**
     * @var string
     */
    public $catalogType;

    /**
     * @var string[]
     */
    public $environments;

    /**
     * @var string[]
     */
    public $extras;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'catalogId' => 'catalogId',
        'catalogProvider' => 'catalogProvider',
        'catalogType' => 'catalogType',
        'environments' => 'environments',
        'extras' => 'extras',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'resourceOwnerId' => 'resourceOwnerId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (\is_array($this->extras)) {
            Model::validateArray($this->extras);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->catalogProvider) {
            $res['catalogProvider'] = $this->catalogProvider;
        }

        if (null !== $this->catalogType) {
            $res['catalogType'] = $this->catalogType;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extras) {
            if (\is_array($this->extras)) {
                $res['extras'] = [];
                foreach ($this->extras as $key1 => $value1) {
                    $res['extras'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->resourceOwnerId) {
            $res['resourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['catalogProvider'])) {
            $model->catalogProvider = $map['catalogProvider'];
        }

        if (isset($map['catalogType'])) {
            $model->catalogType = $map['catalogType'];
        }

        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['extras'])) {
            if (!empty($map['extras'])) {
                $model->extras = [];
                foreach ($map['extras'] as $key1 => $value1) {
                    $model->extras[$key1] = $value1;
                }
            }
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['resourceOwnerId'])) {
            $model->resourceOwnerId = $map['resourceOwnerId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
