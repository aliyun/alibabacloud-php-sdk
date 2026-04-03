<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class FunagentVersionItem extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $publishContent;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'publishContent' => 'publishContent',
        'publishTime' => 'publishTime',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->publishContent)) {
            Model::validateArray($this->publishContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->publishContent) {
            if (\is_array($this->publishContent)) {
                $res['publishContent'] = [];
                $n1 = 0;
                foreach ($this->publishContent as $item1) {
                    $res['publishContent'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publishTime) {
            $res['publishTime'] = $this->publishTime;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['publishContent'])) {
            if (!empty($map['publishContent'])) {
                $model->publishContent = [];
                $n1 = 0;
                foreach ($map['publishContent'] as $item1) {
                    $model->publishContent[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['publishTime'])) {
            $model->publishTime = $map['publishTime'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
