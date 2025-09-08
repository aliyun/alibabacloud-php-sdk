<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDeepWritingResponseBody\payload\output\item\content;

class item extends Model
{
    /**
     * @var string
     */
    public $agent;

    /**
     * @var string
     */
    public $arguments;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'agent' => 'Agent',
        'arguments' => 'Arguments',
        'content' => 'Content',
        'id' => 'Id',
        'name' => 'Name',
        'result' => 'Result',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = $this->agent;
        }

        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Agent'])) {
            $model->agent = $map['Agent'];
        }

        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
