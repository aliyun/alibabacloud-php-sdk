<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductVersionRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var bool
     */
    public $continuousIntegration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entry;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'action'                => 'action',
        'continuousIntegration' => 'continuousIntegration',
        'description'           => 'description',
        'entry'                 => 'entry',
        'timeout'               => 'timeout',
        'version'               => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->continuousIntegration) {
            $res['continuousIntegration'] = $this->continuousIntegration;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->entry) {
            $res['entry'] = $this->entry;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['continuousIntegration'])) {
            $model->continuousIntegration = $map['continuousIntegration'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['entry'])) {
            $model->entry = $map['entry'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
