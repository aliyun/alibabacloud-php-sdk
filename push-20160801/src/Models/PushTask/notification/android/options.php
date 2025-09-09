<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options\accs;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options\honor;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options\huawei;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options\oppo;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options\vivo;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options\xiaomi;

class options extends Model
{
    /**
     * @var accs
     */
    public $accs;

    /**
     * @var honor
     */
    public $honor;

    /**
     * @var huawei
     */
    public $huawei;

    /**
     * @var oppo
     */
    public $oppo;

    /**
     * @var vivo
     */
    public $vivo;

    /**
     * @var xiaomi
     */
    public $xiaomi;
    protected $_name = [
        'accs' => 'Accs',
        'honor' => 'Honor',
        'huawei' => 'Huawei',
        'oppo' => 'Oppo',
        'vivo' => 'Vivo',
        'xiaomi' => 'Xiaomi',
    ];

    public function validate()
    {
        if (null !== $this->accs) {
            $this->accs->validate();
        }
        if (null !== $this->honor) {
            $this->honor->validate();
        }
        if (null !== $this->huawei) {
            $this->huawei->validate();
        }
        if (null !== $this->oppo) {
            $this->oppo->validate();
        }
        if (null !== $this->vivo) {
            $this->vivo->validate();
        }
        if (null !== $this->xiaomi) {
            $this->xiaomi->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accs) {
            $res['Accs'] = null !== $this->accs ? $this->accs->toArray($noStream) : $this->accs;
        }

        if (null !== $this->honor) {
            $res['Honor'] = null !== $this->honor ? $this->honor->toArray($noStream) : $this->honor;
        }

        if (null !== $this->huawei) {
            $res['Huawei'] = null !== $this->huawei ? $this->huawei->toArray($noStream) : $this->huawei;
        }

        if (null !== $this->oppo) {
            $res['Oppo'] = null !== $this->oppo ? $this->oppo->toArray($noStream) : $this->oppo;
        }

        if (null !== $this->vivo) {
            $res['Vivo'] = null !== $this->vivo ? $this->vivo->toArray($noStream) : $this->vivo;
        }

        if (null !== $this->xiaomi) {
            $res['Xiaomi'] = null !== $this->xiaomi ? $this->xiaomi->toArray($noStream) : $this->xiaomi;
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
        if (isset($map['Accs'])) {
            $model->accs = accs::fromMap($map['Accs']);
        }

        if (isset($map['Honor'])) {
            $model->honor = honor::fromMap($map['Honor']);
        }

        if (isset($map['Huawei'])) {
            $model->huawei = huawei::fromMap($map['Huawei']);
        }

        if (isset($map['Oppo'])) {
            $model->oppo = oppo::fromMap($map['Oppo']);
        }

        if (isset($map['Vivo'])) {
            $model->vivo = vivo::fromMap($map['Vivo']);
        }

        if (isset($map['Xiaomi'])) {
            $model->xiaomi = xiaomi::fromMap($map['Xiaomi']);
        }

        return $model;
    }
}
