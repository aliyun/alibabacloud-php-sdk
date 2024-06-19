<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\dnsConfig\option;
use AlibabaCloud\Tea\Model;

class dnsConfig extends Model
{
    /**
     * @description The IP addresses of DNS servers.
     *
     * @example 172.10.*.**
     *
     * @var string[]
     */
    public $nameServer;

    /**
     * @description Configuration options of the DNS server.
     *
     * @var option[]
     */
    public $option;

    /**
     * @description The search domains of DNS servers.
     *
     * @example svc.local.kubenetes
     *
     * @var string[]
     */
    public $search;
    protected $_name = [
        'nameServer' => 'NameServer',
        'option'     => 'Option',
        'search'     => 'Search',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameServer) {
            $res['NameServer'] = $this->nameServer;
        }
        if (null !== $this->option) {
            $res['Option'] = [];
            if (null !== $this->option && \is_array($this->option)) {
                $n = 0;
                foreach ($this->option as $item) {
                    $res['Option'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameServer'])) {
            if (!empty($map['NameServer'])) {
                $model->nameServer = $map['NameServer'];
            }
        }
        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = [];
                $n             = 0;
                foreach ($map['Option'] as $item) {
                    $model->option[$n++] = null !== $item ? option::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Search'])) {
            if (!empty($map['Search'])) {
                $model->search = $map['Search'];
            }
        }

        return $model;
    }
}
