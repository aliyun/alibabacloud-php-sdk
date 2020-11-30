<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackResponse\packInfo;

use AlibabaCloud\Tea\Model;

class packConfig extends Model
{
    /**
     * @var int
     */
    public $packAdvThre;

    /**
     * @var int
     */
    public $ipAdvanceThre;

    /**
     * @var int
     */
    public $ipBasicThre;

    /**
     * @var int
     */
    public $packBasicThre;

    /**
     * @var int
     */
    public $ipSpec;
    protected $_name = [
        'packAdvThre'   => 'PackAdvThre',
        'ipAdvanceThre' => 'IpAdvanceThre',
        'ipBasicThre'   => 'IpBasicThre',
        'packBasicThre' => 'PackBasicThre',
        'ipSpec'        => 'IpSpec',
    ];

    public function validate()
    {
        Model::validateRequired('packAdvThre', $this->packAdvThre, true);
        Model::validateRequired('ipAdvanceThre', $this->ipAdvanceThre, true);
        Model::validateRequired('ipBasicThre', $this->ipBasicThre, true);
        Model::validateRequired('packBasicThre', $this->packBasicThre, true);
        Model::validateRequired('ipSpec', $this->ipSpec, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packAdvThre) {
            $res['PackAdvThre'] = $this->packAdvThre;
        }
        if (null !== $this->ipAdvanceThre) {
            $res['IpAdvanceThre'] = $this->ipAdvanceThre;
        }
        if (null !== $this->ipBasicThre) {
            $res['IpBasicThre'] = $this->ipBasicThre;
        }
        if (null !== $this->packBasicThre) {
            $res['PackBasicThre'] = $this->packBasicThre;
        }
        if (null !== $this->ipSpec) {
            $res['IpSpec'] = $this->ipSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackAdvThre'])) {
            $model->packAdvThre = $map['PackAdvThre'];
        }
        if (isset($map['IpAdvanceThre'])) {
            $model->ipAdvanceThre = $map['IpAdvanceThre'];
        }
        if (isset($map['IpBasicThre'])) {
            $model->ipBasicThre = $map['IpBasicThre'];
        }
        if (isset($map['PackBasicThre'])) {
            $model->packBasicThre = $map['PackBasicThre'];
        }
        if (isset($map['IpSpec'])) {
            $model->ipSpec = $map['IpSpec'];
        }

        return $model;
    }
}
