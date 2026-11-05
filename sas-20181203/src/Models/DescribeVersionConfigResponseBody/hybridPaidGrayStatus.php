<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVersionConfigResponseBody;

use AlibabaCloud\Dara\Model;

class hybridPaidGrayStatus extends Model
{
    /**
     * @var int
     */
    public $ANTI_RANSOMWARE;

    /**
     * @var int
     */
    public $CSPM_INSTANCE;

    /**
     * @var int
     */
    public $HOST;
    protected $_name = [
        'ANTI_RANSOMWARE' => 'ANTI_RANSOMWARE',
        'CSPM_INSTANCE' => 'CSPM_INSTANCE',
        'HOST' => 'HOST',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ANTI_RANSOMWARE) {
            $res['ANTI_RANSOMWARE'] = $this->ANTI_RANSOMWARE;
        }

        if (null !== $this->CSPM_INSTANCE) {
            $res['CSPM_INSTANCE'] = $this->CSPM_INSTANCE;
        }

        if (null !== $this->HOST) {
            $res['HOST'] = $this->HOST;
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
        if (isset($map['ANTI_RANSOMWARE'])) {
            $model->ANTI_RANSOMWARE = $map['ANTI_RANSOMWARE'];
        }

        if (isset($map['CSPM_INSTANCE'])) {
            $model->CSPM_INSTANCE = $map['CSPM_INSTANCE'];
        }

        if (isset($map['HOST'])) {
            $model->HOST = $map['HOST'];
        }

        return $model;
    }
}
