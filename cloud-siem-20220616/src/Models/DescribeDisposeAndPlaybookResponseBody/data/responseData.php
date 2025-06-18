<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponseBody\data\responseData\playbookList;

class responseData extends Model
{
    /**
     * @var int
     */
    public $alertNum;

    /**
     * @var string
     */
    public $dispose;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var mixed[]
     */
    public $entityInfo;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string[]
     */
    public $opcodeMap;

    /**
     * @var string[]
     */
    public $opcodeSet;

    /**
     * @var playbookList[]
     */
    public $playbookList;

    /**
     * @var mixed[]
     */
    public $scope;
    protected $_name = [
        'alertNum' => 'AlertNum',
        'dispose' => 'Dispose',
        'entityId' => 'EntityId',
        'entityInfo' => 'EntityInfo',
        'entityType' => 'EntityType',
        'opcodeMap' => 'OpcodeMap',
        'opcodeSet' => 'OpcodeSet',
        'playbookList' => 'PlaybookList',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->entityInfo)) {
            Model::validateArray($this->entityInfo);
        }
        if (\is_array($this->opcodeMap)) {
            Model::validateArray($this->opcodeMap);
        }
        if (\is_array($this->opcodeSet)) {
            Model::validateArray($this->opcodeSet);
        }
        if (\is_array($this->playbookList)) {
            Model::validateArray($this->playbookList);
        }
        if (\is_array($this->scope)) {
            Model::validateArray($this->scope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNum) {
            $res['AlertNum'] = $this->alertNum;
        }

        if (null !== $this->dispose) {
            $res['Dispose'] = $this->dispose;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityInfo) {
            if (\is_array($this->entityInfo)) {
                $res['EntityInfo'] = [];
                foreach ($this->entityInfo as $key1 => $value1) {
                    $res['EntityInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->opcodeMap) {
            if (\is_array($this->opcodeMap)) {
                $res['OpcodeMap'] = [];
                foreach ($this->opcodeMap as $key1 => $value1) {
                    $res['OpcodeMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->opcodeSet) {
            if (\is_array($this->opcodeSet)) {
                $res['OpcodeSet'] = [];
                $n1 = 0;
                foreach ($this->opcodeSet as $item1) {
                    $res['OpcodeSet'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->playbookList) {
            if (\is_array($this->playbookList)) {
                $res['PlaybookList'] = [];
                $n1 = 0;
                foreach ($this->playbookList as $item1) {
                    $res['PlaybookList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            if (\is_array($this->scope)) {
                $res['Scope'] = [];
                $n1 = 0;
                foreach ($this->scope as $item1) {
                    $res['Scope'][$n1] = $item1;
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
        if (isset($map['AlertNum'])) {
            $model->alertNum = $map['AlertNum'];
        }

        if (isset($map['Dispose'])) {
            $model->dispose = $map['Dispose'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityInfo'])) {
            if (!empty($map['EntityInfo'])) {
                $model->entityInfo = [];
                foreach ($map['EntityInfo'] as $key1 => $value1) {
                    $model->entityInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['OpcodeMap'])) {
            if (!empty($map['OpcodeMap'])) {
                $model->opcodeMap = [];
                foreach ($map['OpcodeMap'] as $key1 => $value1) {
                    $model->opcodeMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['OpcodeSet'])) {
            if (!empty($map['OpcodeSet'])) {
                $model->opcodeSet = [];
                $n1 = 0;
                foreach ($map['OpcodeSet'] as $item1) {
                    $model->opcodeSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PlaybookList'])) {
            if (!empty($map['PlaybookList'])) {
                $model->playbookList = [];
                $n1 = 0;
                foreach ($map['PlaybookList'] as $item1) {
                    $model->playbookList[$n1] = playbookList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = [];
                $n1 = 0;
                foreach ($map['Scope'] as $item1) {
                    $model->scope[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
