<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListCustomAgentToolsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $en;

    /**
     * @var string
     */
    public $ja;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tc;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $zh;
    protected $_name = [
        'en' => 'En',
        'ja' => 'Ja',
        'name' => 'Name',
        'tc' => 'Tc',
        'type' => 'Type',
        'zh' => 'Zh',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->en) {
            $res['En'] = $this->en;
        }

        if (null !== $this->ja) {
            $res['Ja'] = $this->ja;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tc) {
            $res['Tc'] = $this->tc;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->zh) {
            $res['Zh'] = $this->zh;
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
        if (isset($map['En'])) {
            $model->en = $map['En'];
        }

        if (isset($map['Ja'])) {
            $model->ja = $map['Ja'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Tc'])) {
            $model->tc = $map['Tc'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Zh'])) {
            $model->zh = $map['Zh'];
        }

        return $model;
    }
}
