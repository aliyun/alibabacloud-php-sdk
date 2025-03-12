<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\UpdatePostPaidBindRelRequest\bindAction;
use AlibabaCloud\Tea\Model;

class UpdatePostPaidBindRelRequest extends Model
{
    /**
     * @description Enable automatic binding for new assets. Values:
     *
     * - **0**: Off
     * - **1**: On
     * @example 1
     *
     * @var int
     */
    public $autoBind;

    /**
     * @description Version to automatically bind when adding new assets. Values:
     * - **1**: Basic Edition
     * - **3**: Enterprise Edition
     * - **5**: Advanced Edition
     * - **6**: Antivirus Edition
     * - **7**: Container Edition
     * @example 3
     *
     * @var int
     */
    public $autoBindVersion;

    /**
     * @description Parameters for the binding action.
     *
     * @var bindAction[]
     */
    public $bindAction;
    protected $_name = [
        'autoBind'        => 'AutoBind',
        'autoBindVersion' => 'AutoBindVersion',
        'bindAction'      => 'BindAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }
        if (null !== $this->autoBindVersion) {
            $res['AutoBindVersion'] = $this->autoBindVersion;
        }
        if (null !== $this->bindAction) {
            $res['BindAction'] = [];
            if (null !== $this->bindAction && \is_array($this->bindAction)) {
                $n = 0;
                foreach ($this->bindAction as $item) {
                    $res['BindAction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePostPaidBindRelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }
        if (isset($map['AutoBindVersion'])) {
            $model->autoBindVersion = $map['AutoBindVersion'];
        }
        if (isset($map['BindAction'])) {
            if (!empty($map['BindAction'])) {
                $model->bindAction = [];
                $n                 = 0;
                foreach ($map['BindAction'] as $item) {
                    $model->bindAction[$n++] = null !== $item ? bindAction::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
