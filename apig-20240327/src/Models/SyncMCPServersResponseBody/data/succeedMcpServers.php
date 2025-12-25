<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\SyncMCPServersResponseBody\data;

use AlibabaCloud\Dara\Model;

class succeedMcpServers extends Model
{
    /**
     * @var string
     */
    public $mcpServerName;

    /**
     * @var string[]
     */
    public $protocols;
    protected $_name = [
        'mcpServerName' => 'mcpServerName',
        'protocols' => 'protocols',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServerName) {
            $res['mcpServerName'] = $this->mcpServerName;
        }

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['protocols'] = [];
                $n1 = 0;
                foreach ($this->protocols as $item1) {
                    $res['protocols'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['mcpServerName'])) {
            $model->mcpServerName = $map['mcpServerName'];
        }

        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = [];
                $n1 = 0;
                foreach ($map['protocols'] as $item1) {
                    $model->protocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
