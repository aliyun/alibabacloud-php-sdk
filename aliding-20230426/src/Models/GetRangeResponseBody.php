<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeResponseBody\backgroundColors;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeResponseBody\hyperlinks;

class GetRangeResponseBody extends Model
{
    /**
     * @var backgroundColors[][]
     */
    public $backgroundColors;

    /**
     * @var string[][]
     */
    public $displayValues;

    /**
     * @var string[][]
     */
    public $formulas;

    /**
     * @var hyperlinks[][]
     */
    public $hyperlinks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'backgroundColors' => 'backgroundColors',
        'displayValues' => 'displayValues',
        'formulas' => 'formulas',
        'hyperlinks' => 'hyperlinks',
        'requestId' => 'requestId',
        'values' => 'values',
    ];

    public function validate()
    {
        if (\is_array($this->backgroundColors)) {
            Model::validateArray($this->backgroundColors);
        }
        if (\is_array($this->displayValues)) {
            Model::validateArray($this->displayValues);
        }
        if (\is_array($this->formulas)) {
            Model::validateArray($this->formulas);
        }
        if (\is_array($this->hyperlinks)) {
            Model::validateArray($this->hyperlinks);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundColors) {
            if (\is_array($this->backgroundColors)) {
                $res['backgroundColors'] = [];
                $n1 = 0;
                foreach ($this->backgroundColors as $item1) {
                    if (\is_array($item1)) {
                        $res['backgroundColors'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['backgroundColors'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->displayValues) {
            if (\is_array($this->displayValues)) {
                $res['displayValues'] = [];
                $n1 = 0;
                foreach ($this->displayValues as $item1) {
                    if (\is_array($item1)) {
                        $res['displayValues'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['displayValues'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->formulas) {
            if (\is_array($this->formulas)) {
                $res['formulas'] = [];
                $n1 = 0;
                foreach ($this->formulas as $item1) {
                    if (\is_array($item1)) {
                        $res['formulas'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['formulas'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->hyperlinks) {
            if (\is_array($this->hyperlinks)) {
                $res['hyperlinks'] = [];
                $n1 = 0;
                foreach ($this->hyperlinks as $item1) {
                    if (\is_array($item1)) {
                        $res['hyperlinks'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['hyperlinks'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['values'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['values'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['backgroundColors'])) {
            if (!empty($map['backgroundColors'])) {
                $model->backgroundColors = [];
                $n1 = 0;
                foreach ($map['backgroundColors'] as $item1) {
                    if (!empty($item1)) {
                        $model->backgroundColors[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->backgroundColors[$n1][$n2] = backgroundColors::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['displayValues'])) {
            if (!empty($map['displayValues'])) {
                $model->displayValues = [];
                $n1 = 0;
                foreach ($map['displayValues'] as $item1) {
                    if (!empty($item1)) {
                        $model->displayValues[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->displayValues[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['formulas'])) {
            if (!empty($map['formulas'])) {
                $model->formulas = [];
                $n1 = 0;
                foreach ($map['formulas'] as $item1) {
                    if (!empty($item1)) {
                        $model->formulas[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->formulas[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['hyperlinks'])) {
            if (!empty($map['hyperlinks'])) {
                $model->hyperlinks = [];
                $n1 = 0;
                foreach ($map['hyperlinks'] as $item1) {
                    if (!empty($item1)) {
                        $model->hyperlinks[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->hyperlinks[$n1][$n2] = hyperlinks::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->values[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
