<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListResponseBody\data\accounts;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var accounts[]
     */
    public $accounts;

    /**
     * @example utf8mb4
     *
     * @var string
     */
    public $characterSetName;

    /**
     * @example test
     *
     * @var string
     */
    public $DBDescription;

    /**
     * @example pxc-********
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example test
     *
     * @var string
     */
    public $DBName;
    protected $_name = [
        'accounts' => 'Accounts',
        'characterSetName' => 'CharacterSetName',
        'DBDescription' => 'DBDescription',
        'DBInstanceName' => 'DBInstanceName',
        'DBName' => 'DBName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = [];
            if (null !== $this->accounts && \is_array($this->accounts)) {
                $n = 0;
                foreach ($this->accounts as $item) {
                    $res['Accounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = [];
                $n = 0;
                foreach ($map['Accounts'] as $item) {
                    $model->accounts[$n++] = null !== $item ? accounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        return $model;
    }
}
