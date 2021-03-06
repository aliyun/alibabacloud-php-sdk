<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListIdentModelsResponse\pidIdentModelList;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var float
     */
    public $k;

    /**
     * @var float
     */
    public $tau;

    /**
     * @var float
     */
    public $t1;

    /**
     * @var float
     */
    public $t2;
    protected $_name = [
        'k'   => 'K',
        'tau' => 'Tau',
        't1'  => 'T1',
        't2'  => 'T2',
    ];

    public function validate()
    {
        self::validateRequired('k', $this->k, true);
        self::validateRequired('tau', $this->tau, true);
        self::validateRequired('t1', $this->t1, true);
        self::validateRequired('t2', $this->t2, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k) {
            $res['K'] = $this->k;
        }
        if (null !== $this->tau) {
            $res['Tau'] = $this->tau;
        }
        if (null !== $this->t1) {
            $res['T1'] = $this->t1;
        }
        if (null !== $this->t2) {
            $res['T2'] = $this->t2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K'])) {
            $model->k = $map['K'];
        }
        if (isset($map['Tau'])) {
            $model->tau = $map['Tau'];
        }
        if (isset($map['T1'])) {
            $model->t1 = $map['T1'];
        }
        if (isset($map['T2'])) {
            $model->t2 = $map['T2'];
        }

        return $model;
    }
}
