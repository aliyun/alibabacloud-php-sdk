<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @example deny
     *
     * @var string
     */
    public $action;

    /**
     * @example example
     *
     * @var string
     */
    public $idNameLike;

    /**
     * @var int[]
     */
    public $protectionLevels;

    /**
     * @example on
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'action'           => 'Action',
        'idNameLike'       => 'IdNameLike',
        'protectionLevels' => 'ProtectionLevels',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->idNameLike) {
            $res['IdNameLike'] = $this->idNameLike;
        }
        if (null !== $this->protectionLevels) {
            $res['ProtectionLevels'] = $this->protectionLevels;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['IdNameLike'])) {
            $model->idNameLike = $map['IdNameLike'];
        }
        if (isset($map['ProtectionLevels'])) {
            if (!empty($map['ProtectionLevels'])) {
                $model->protectionLevels = $map['ProtectionLevels'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
