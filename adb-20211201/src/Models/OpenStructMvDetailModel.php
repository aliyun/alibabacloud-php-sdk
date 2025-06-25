<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenStructMvDetailModel extends Model
{
    /**
     * @var string[][]
     */
    public $baseTableNames;

    /**
     * @var int
     */
    public $explicitHit;

    /**
     * @var string
     */
    public $firstRefreshTime;

    /**
     * @var int
     */
    public $implicitHit;

    /**
     * @var bool
     */
    public $isInactive;

    /**
     * @var int
     */
    public $localSize;

    /**
     * @var bool
     */
    public $queryRewriteEnabled;

    /**
     * @var string
     */
    public $refreshInterval;

    /**
     * @var string
     */
    public $refreshState;

    /**
     * @var int
     */
    public $remoteSize;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'baseTableNames' => 'BaseTableNames',
        'explicitHit' => 'ExplicitHit',
        'firstRefreshTime' => 'FirstRefreshTime',
        'implicitHit' => 'ImplicitHit',
        'isInactive' => 'IsInactive',
        'localSize' => 'LocalSize',
        'queryRewriteEnabled' => 'QueryRewriteEnabled',
        'refreshInterval' => 'RefreshInterval',
        'refreshState' => 'RefreshState',
        'remoteSize' => 'RemoteSize',
        'resourceGroup' => 'ResourceGroup',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->baseTableNames)) {
            Model::validateArray($this->baseTableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseTableNames) {
            if (\is_array($this->baseTableNames)) {
                $res['BaseTableNames'] = [];
                $n1 = 0;
                foreach ($this->baseTableNames as $item1) {
                    if (\is_array($item1)) {
                        $res['BaseTableNames'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['BaseTableNames'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->explicitHit) {
            $res['ExplicitHit'] = $this->explicitHit;
        }

        if (null !== $this->firstRefreshTime) {
            $res['FirstRefreshTime'] = $this->firstRefreshTime;
        }

        if (null !== $this->implicitHit) {
            $res['ImplicitHit'] = $this->implicitHit;
        }

        if (null !== $this->isInactive) {
            $res['IsInactive'] = $this->isInactive;
        }

        if (null !== $this->localSize) {
            $res['LocalSize'] = $this->localSize;
        }

        if (null !== $this->queryRewriteEnabled) {
            $res['QueryRewriteEnabled'] = $this->queryRewriteEnabled;
        }

        if (null !== $this->refreshInterval) {
            $res['RefreshInterval'] = $this->refreshInterval;
        }

        if (null !== $this->refreshState) {
            $res['RefreshState'] = $this->refreshState;
        }

        if (null !== $this->remoteSize) {
            $res['RemoteSize'] = $this->remoteSize;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['BaseTableNames'])) {
            if (!empty($map['BaseTableNames'])) {
                $model->baseTableNames = [];
                $n1 = 0;
                foreach ($map['BaseTableNames'] as $item1) {
                    if (!empty($item1)) {
                        $model->baseTableNames[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->baseTableNames[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ExplicitHit'])) {
            $model->explicitHit = $map['ExplicitHit'];
        }

        if (isset($map['FirstRefreshTime'])) {
            $model->firstRefreshTime = $map['FirstRefreshTime'];
        }

        if (isset($map['ImplicitHit'])) {
            $model->implicitHit = $map['ImplicitHit'];
        }

        if (isset($map['IsInactive'])) {
            $model->isInactive = $map['IsInactive'];
        }

        if (isset($map['LocalSize'])) {
            $model->localSize = $map['LocalSize'];
        }

        if (isset($map['QueryRewriteEnabled'])) {
            $model->queryRewriteEnabled = $map['QueryRewriteEnabled'];
        }

        if (isset($map['RefreshInterval'])) {
            $model->refreshInterval = $map['RefreshInterval'];
        }

        if (isset($map['RefreshState'])) {
            $model->refreshState = $map['RefreshState'];
        }

        if (isset($map['RemoteSize'])) {
            $model->remoteSize = $map['RemoteSize'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
