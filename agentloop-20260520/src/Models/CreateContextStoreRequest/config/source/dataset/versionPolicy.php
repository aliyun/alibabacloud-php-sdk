<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\dataset;

use AlibabaCloud\Dara\Model;

class versionPolicy extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $startSeq;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'mode' => 'mode',
        'startSeq' => 'startSeq',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->startSeq) {
            $res['startSeq'] = $this->startSeq;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['startSeq'])) {
            $model->startSeq = $map['startSeq'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
