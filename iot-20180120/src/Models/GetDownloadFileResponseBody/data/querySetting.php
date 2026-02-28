<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data\querySetting\astExpr;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDownloadFileResponseBody\data\querySetting\selectedHeaders;

class querySetting extends Model
{
    /**
     * @var astExpr[]
     */
    public $astExpr;

    /**
     * @var selectedHeaders[]
     */
    public $selectedHeaders;
    protected $_name = [
        'astExpr' => 'AstExpr',
        'selectedHeaders' => 'SelectedHeaders',
    ];

    public function validate()
    {
        if (\is_array($this->astExpr)) {
            Model::validateArray($this->astExpr);
        }
        if (\is_array($this->selectedHeaders)) {
            Model::validateArray($this->selectedHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->astExpr) {
            if (\is_array($this->astExpr)) {
                $res['AstExpr'] = [];
                $n1 = 0;
                foreach ($this->astExpr as $item1) {
                    $res['AstExpr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectedHeaders) {
            if (\is_array($this->selectedHeaders)) {
                $res['SelectedHeaders'] = [];
                $n1 = 0;
                foreach ($this->selectedHeaders as $item1) {
                    $res['SelectedHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AstExpr'])) {
            if (!empty($map['AstExpr'])) {
                $model->astExpr = [];
                $n1 = 0;
                foreach ($map['AstExpr'] as $item1) {
                    $model->astExpr[$n1] = astExpr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SelectedHeaders'])) {
            if (!empty($map['SelectedHeaders'])) {
                $model->selectedHeaders = [];
                $n1 = 0;
                foreach ($map['SelectedHeaders'] as $item1) {
                    $model->selectedHeaders[$n1] = selectedHeaders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
