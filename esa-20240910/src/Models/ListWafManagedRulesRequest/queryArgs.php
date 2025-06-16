<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesRequest;

use AlibabaCloud\Dara\Model;

class queryArgs extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $idNameLike;

    /**
     * @var int[]
     */
    public $protectionLevels;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'idNameLike' => 'IdNameLike',
        'protectionLevels' => 'ProtectionLevels',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->protectionLevels)) {
            Model::validateArray($this->protectionLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->idNameLike) {
            $res['IdNameLike'] = $this->idNameLike;
        }

        if (null !== $this->protectionLevels) {
            if (\is_array($this->protectionLevels)) {
                $res['ProtectionLevels'] = [];
                $n1 = 0;
                foreach ($this->protectionLevels as $item1) {
                    $res['ProtectionLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['IdNameLike'])) {
            $model->idNameLike = $map['IdNameLike'];
        }

        if (isset($map['ProtectionLevels'])) {
            if (!empty($map['ProtectionLevels'])) {
                $model->protectionLevels = [];
                $n1 = 0;
                foreach ($map['ProtectionLevels'] as $item1) {
                    $model->protectionLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
