<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var mixed[][]
     */
    public $agents;

    /**
     * @var mixed[][]
     */
    public $artifacts;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var mixed[][]
     */
    public $contents;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var mixed[][]
     */
    public $events;

    /**
     * @var string
     */
    public $parentCallId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var int
     */
    public $seq;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var mixed[][]
     */
    public $tools;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'agents' => 'agents',
        'artifacts' => 'artifacts',
        'callId' => 'callId',
        'contents' => 'contents',
        'detail' => 'detail',
        'events' => 'events',
        'parentCallId' => 'parentCallId',
        'role' => 'role',
        'seq' => 'seq',
        'timestamp' => 'timestamp',
        'tools' => 'tools',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->agents)) {
            Model::validateArray($this->agents);
        }
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            if (\is_array($this->agents)) {
                $res['agents'] = [];
                $n1 = 0;
                foreach ($this->agents as $item1) {
                    if (\is_array($item1)) {
                        $res['agents'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['agents'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    if (\is_array($item1)) {
                        $res['artifacts'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['artifacts'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->callId) {
            $res['callId'] = $this->callId;
        }

        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    if (\is_array($item1)) {
                        $res['contents'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['contents'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    if (\is_array($item1)) {
                        $res['events'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['events'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentCallId) {
            $res['parentCallId'] = $this->parentCallId;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->seq) {
            $res['seq'] = $this->seq;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    if (\is_array($item1)) {
                        $res['tools'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['tools'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['agents'])) {
            if (!empty($map['agents'])) {
                $model->agents = [];
                $n1 = 0;
                foreach ($map['agents'] as $item1) {
                    if (!empty($item1)) {
                        $model->agents[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->agents[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['artifacts'])) {
            if (!empty($map['artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['artifacts'] as $item1) {
                    if (!empty($item1)) {
                        $model->artifacts[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->artifacts[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['callId'])) {
            $model->callId = $map['callId'];
        }

        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['contents'] as $item1) {
                    if (!empty($item1)) {
                        $model->contents[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->contents[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }

        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    if (!empty($item1)) {
                        $model->events[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->events[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['parentCallId'])) {
            $model->parentCallId = $map['parentCallId'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['seq'])) {
            $model->seq = $map['seq'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    if (!empty($item1)) {
                        $model->tools[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->tools[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
