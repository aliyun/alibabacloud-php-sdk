<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class ListTerminalsRequest extends Model
{
    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string
     */
    public $mainBizType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $passwordFreeLoginUser;

    /**
     * @var string
     */
    public $searchKeyword;

    /**
     * @var string[]
     */
    public $serialNumbers;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string[]
     */
    public $uuids;

    /**
     * @var bool
     */
    public $withBindUser;
    protected $_name = [
        'inManage' => 'InManage',
        'mainBizType' => 'MainBizType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'passwordFreeLoginUser' => 'PasswordFreeLoginUser',
        'searchKeyword' => 'SearchKeyword',
        'serialNumbers' => 'SerialNumbers',
        'terminalGroupId' => 'TerminalGroupId',
        'uuids' => 'Uuids',
        'withBindUser' => 'WithBindUser',
    ];

    public function validate()
    {
        if (\is_array($this->serialNumbers)) {
            Model::validateArray($this->serialNumbers);
        }
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }

        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->passwordFreeLoginUser) {
            $res['PasswordFreeLoginUser'] = $this->passwordFreeLoginUser;
        }

        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }

        if (null !== $this->serialNumbers) {
            if (\is_array($this->serialNumbers)) {
                $res['SerialNumbers'] = [];
                $n1 = 0;
                foreach ($this->serialNumbers as $item1) {
                    $res['SerialNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->withBindUser) {
            $res['WithBindUser'] = $this->withBindUser;
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
        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }

        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PasswordFreeLoginUser'])) {
            $model->passwordFreeLoginUser = $map['PasswordFreeLoginUser'];
        }

        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }

        if (isset($map['SerialNumbers'])) {
            if (!empty($map['SerialNumbers'])) {
                $model->serialNumbers = [];
                $n1 = 0;
                foreach ($map['SerialNumbers'] as $item1) {
                    $model->serialNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WithBindUser'])) {
            $model->withBindUser = $map['WithBindUser'];
        }

        return $model;
    }
}
