<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody\result\network\whiteIpGroup;
use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $type;

    /**
     * @var whiteIpGroup[]
     */
    public $whiteIpGroup;
    protected $_name = [
        'domain'       => 'domain',
        'enabled'      => 'enabled',
        'port'         => 'port',
        'type'         => 'type',
        'whiteIpGroup' => 'whiteIpGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->whiteIpGroup) {
            $res['whiteIpGroup'] = [];
            if (null !== $this->whiteIpGroup && \is_array($this->whiteIpGroup)) {
                $n = 0;
                foreach ($this->whiteIpGroup as $item) {
                    $res['whiteIpGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['whiteIpGroup'])) {
            if (!empty($map['whiteIpGroup'])) {
                $model->whiteIpGroup = [];
                $n                   = 0;
                foreach ($map['whiteIpGroup'] as $item) {
                    $model->whiteIpGroup[$n++] = null !== $item ? whiteIpGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
