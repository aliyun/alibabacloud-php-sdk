<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponseBody\data\responseData\playbookList;
use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $alertNum;

    /**
     * @example 192.168.1.1
     *
     * @var string
     */
    public $dispose;

    /**
     * @example 12345
     *
     * @var int
     */
    public $entityId;

    /**
     * @example {"file_path": "c:/www/leixi.jsp","file_hash": "aa0ca926ad948cd820e0a3d9a18c09d0","host_uuid": "efed2cf7-0b77-45d9-a97b-d2cf246bcbb3","malware_type": "${aliyun.siem.sas.alert_tag.webshell}","host_name": "launch-advisor-20230531"}
     *
     * @var mixed[]
     */
    public $entityInfo;

    /**
     * @example 12345
     *
     * @var string[]
     */
    public $opcodeMap;

    /**
     * @example [1,3]
     *
     * @var string[]
     */
    public $opcodeSet;

    /**
     * @example [{"name":"云安全中心-云服务器安全","code":"1"}]
     *
     * @var playbookList[]
     */
    public $playbookList;

    /**
     * @example 176618589410****
     *
     * @var mixed[]
     */
    public $scope;
    protected $_name = [
        'alertNum'     => 'AlertNum',
        'dispose'      => 'Dispose',
        'entityId'     => 'EntityId',
        'entityInfo'   => 'EntityInfo',
        'opcodeMap'    => 'OpcodeMap',
        'opcodeSet'    => 'OpcodeSet',
        'playbookList' => 'PlaybookList',
        'scope'        => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['EntityInfo'] = $this->entityInfo;
        }
        if (null !== $this->opcodeMap) {
            $res['OpcodeMap'] = $this->opcodeMap;
        }
        if (null !== $this->opcodeSet) {
            $res['OpcodeSet'] = $this->opcodeSet;
        }
        if (null !== $this->playbookList) {
            $res['PlaybookList'] = [];
            if (null !== $this->playbookList && \is_array($this->playbookList)) {
                $n = 0;
                foreach ($this->playbookList as $item) {
                    $res['PlaybookList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
     */
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
            $model->entityInfo = $map['EntityInfo'];
        }
        if (isset($map['OpcodeMap'])) {
            $model->opcodeMap = $map['OpcodeMap'];
        }
        if (isset($map['OpcodeSet'])) {
            if (!empty($map['OpcodeSet'])) {
                $model->opcodeSet = $map['OpcodeSet'];
            }
        }
        if (isset($map['PlaybookList'])) {
            if (!empty($map['PlaybookList'])) {
                $model->playbookList = [];
                $n                   = 0;
                foreach ($map['PlaybookList'] as $item) {
                    $model->playbookList[$n++] = null !== $item ? playbookList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = $map['Scope'];
            }
        }

        return $model;
    }
}
