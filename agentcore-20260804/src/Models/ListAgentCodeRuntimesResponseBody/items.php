<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListAgentCodeRuntimesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $languageRuntime;
    protected $_name = [
        'architecture' => 'architecture',
        'displayName' => 'displayName',
        'languageRuntime' => 'languageRuntime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['architecture'] = $this->architecture;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->languageRuntime) {
            $res['languageRuntime'] = $this->languageRuntime;
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
        if (isset($map['architecture'])) {
            $model->architecture = $map['architecture'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['languageRuntime'])) {
            $model->languageRuntime = $map['languageRuntime'];
        }

        return $model;
    }
}
