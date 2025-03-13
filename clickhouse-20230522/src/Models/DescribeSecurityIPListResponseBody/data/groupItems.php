<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSecurityIPListResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupItems extends Model
{
    /**
     * @description The name of the whitelist.
     *
     * @example default
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The tag of the whitelist.
     *
     * @example test
     *
     * @var string
     */
    public $groupTag;

    /**
     * @description The IP addresses and CIDR blocks in the whitelist.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The IP address type.
     *
     * @example ipv4
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @description The network type of the whitelist.
     *
     * @example mix
     *
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'groupName' => 'GroupName',
        'groupTag' => 'GroupTag',
        'securityIPList' => 'SecurityIPList',
        'securityIPType' => 'SecurityIPType',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->whitelistNetType) {
            $res['WhitelistNetType'] = $this->whitelistNetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['WhitelistNetType'])) {
            $model->whitelistNetType = $map['WhitelistNetType'];
        }

        return $model;
    }
}
