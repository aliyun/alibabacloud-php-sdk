<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ReleaseEipAddressRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $eips;
    protected $_name = [
        'version'     => 'Version',
        'ensRegionId' => 'EnsRegionId',
        'eips'        => 'Eips',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('eips', $this->eips, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->eips) {
            $res['Eips'] = $this->eips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Eips'])) {
            $model->eips = $map['Eips'];
        }

        return $model;
    }
}
