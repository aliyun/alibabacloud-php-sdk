<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class DescribeAccountAuthorityResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string[]
     */
    public $allowDatabases;

    /**
     * @var string[]
     */
    public $allowDictionaries;

    /**
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @var string
     */
    public $dmlAuthority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $totalDatabases;

    /**
     * @var string[]
     */
    public $totalDictionaries;
    protected $_name = [
        'accountName' => 'AccountName',
        'allowDatabases' => 'AllowDatabases',
        'allowDictionaries' => 'AllowDictionaries',
        'ddlAuthority' => 'DdlAuthority',
        'dmlAuthority' => 'DmlAuthority',
        'requestId' => 'RequestId',
        'totalDatabases' => 'TotalDatabases',
        'totalDictionaries' => 'TotalDictionaries',
    ];

    public function validate()
    {
        if (\is_array($this->allowDatabases)) {
            Model::validateArray($this->allowDatabases);
        }
        if (\is_array($this->allowDictionaries)) {
            Model::validateArray($this->allowDictionaries);
        }
        if (\is_array($this->totalDatabases)) {
            Model::validateArray($this->totalDatabases);
        }
        if (\is_array($this->totalDictionaries)) {
            Model::validateArray($this->totalDictionaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->allowDatabases) {
            if (\is_array($this->allowDatabases)) {
                $res['AllowDatabases'] = [];
                $n1 = 0;
                foreach ($this->allowDatabases as $item1) {
                    $res['AllowDatabases'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowDictionaries) {
            if (\is_array($this->allowDictionaries)) {
                $res['AllowDictionaries'] = [];
                $n1 = 0;
                foreach ($this->allowDictionaries as $item1) {
                    $res['AllowDictionaries'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }

        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalDatabases) {
            if (\is_array($this->totalDatabases)) {
                $res['TotalDatabases'] = [];
                $n1 = 0;
                foreach ($this->totalDatabases as $item1) {
                    $res['TotalDatabases'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalDictionaries) {
            if (\is_array($this->totalDictionaries)) {
                $res['TotalDictionaries'] = [];
                $n1 = 0;
                foreach ($this->totalDictionaries as $item1) {
                    $res['TotalDictionaries'][$n1] = $item1;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AllowDatabases'])) {
            if (!empty($map['AllowDatabases'])) {
                $model->allowDatabases = [];
                $n1 = 0;
                foreach ($map['AllowDatabases'] as $item1) {
                    $model->allowDatabases[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AllowDictionaries'])) {
            if (!empty($map['AllowDictionaries'])) {
                $model->allowDictionaries = [];
                $n1 = 0;
                foreach ($map['AllowDictionaries'] as $item1) {
                    $model->allowDictionaries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }

        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalDatabases'])) {
            if (!empty($map['TotalDatabases'])) {
                $model->totalDatabases = [];
                $n1 = 0;
                foreach ($map['TotalDatabases'] as $item1) {
                    $model->totalDatabases[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalDictionaries'])) {
            if (!empty($map['TotalDictionaries'])) {
                $model->totalDictionaries = [];
                $n1 = 0;
                foreach ($map['TotalDictionaries'] as $item1) {
                    $model->totalDictionaries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
