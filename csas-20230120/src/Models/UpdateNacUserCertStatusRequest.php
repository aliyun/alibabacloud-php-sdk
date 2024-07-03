<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateNacUserCertStatusRequest\idList;
use AlibabaCloud\Tea\Model;

class UpdateNacUserCertStatusRequest extends Model
{
    /**
     * @var idList[]
     */
    public $idList;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'idList' => 'IdList',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idList) {
            $res['IdList'] = [];
            if (null !== $this->idList && \is_array($this->idList)) {
                $n = 0;
                foreach ($this->idList as $item) {
                    $res['IdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNacUserCertStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n             = 0;
                foreach ($map['IdList'] as $item) {
                    $model->idList[$n++] = null !== $item ? idList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
