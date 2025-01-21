<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cdnDomain;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'cdnDomain' => 'CdnDomain',
        'endpoint'  => 'Endpoint',
        'pid'       => 'Pid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnDomain) {
            $res['CdnDomain'] = $this->cdnDomain;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
        if (isset($map['CdnDomain'])) {
            $model->cdnDomain = $map['CdnDomain'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
