<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponseBody\rules;

use AlibabaCloud\Tea\Model;

class protocolType extends Model
{
    /**
     * @description RDP interception method, values:
     * - **on**: enable
     * - **off**: disable
     *
     * @example on
     *
     * @var string
     */
    public $rdp;

    /**
     * @description SqlServer interception mode, with values:
     * - **on**: enable
     * - **off**: disable
     *
     * @example off
     *
     * @var string
     */
    public $sqlServer;

    /**
     * @description SSH interception method, with values:
     * - **on**: enabled
     * - **off**: disabled
     *
     * @example on
     *
     * @var string
     */
    public $ssh;
    protected $_name = [
        'rdp' => 'Rdp',
        'sqlServer' => 'SqlServer',
        'ssh' => 'Ssh',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdp) {
            $res['Rdp'] = $this->rdp;
        }
        if (null !== $this->sqlServer) {
            $res['SqlServer'] = $this->sqlServer;
        }
        if (null !== $this->ssh) {
            $res['Ssh'] = $this->ssh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocolType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rdp'])) {
            $model->rdp = $map['Rdp'];
        }
        if (isset($map['SqlServer'])) {
            $model->sqlServer = $map['SqlServer'];
        }
        if (isset($map['Ssh'])) {
            $model->ssh = $map['Ssh'];
        }

        return $model;
    }
}
