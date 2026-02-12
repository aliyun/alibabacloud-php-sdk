<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class JobTemplateVersionDetail extends Model
{
    /**
     * @var string[]
     */
    public $constraints;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'constraints' => 'Constraints',
        'content' => 'Content',
        'createdBy' => 'CreatedBy',
        'gmtCreated' => 'GmtCreated',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->constraints)) {
            Model::validateArray($this->constraints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraints) {
            if (\is_array($this->constraints)) {
                $res['Constraints'] = [];
                foreach ($this->constraints as $key1 => $value1) {
                    $res['Constraints'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Constraints'])) {
            if (!empty($map['Constraints'])) {
                $model->constraints = [];
                foreach ($map['Constraints'] as $key1 => $value1) {
                    $model->constraints[$key1] = $value1;
                }
            }
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
